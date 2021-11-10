import { Component, OnInit } from '@angular/core';
import { BouteilleDeVinService } from '@services/bouteille-de-vin.service';
import { FormControl } from '@angular/forms';
import { Subject } from 'rxjs';
import { debounceTime, distinctUntilChanged } from 'rxjs/operators';
import { MatDrawerMode } from '@angular/material/sidenav';

@Component({
    selector: 'app-cellier',
    templateUrl: './cellier.component.html',
    styleUrls: ['./cellier.component.scss']
})
export class CellierComponent implements OnInit {

    // Sauvegarder la liste initiale de bouteilles afin de s'éviter une requête http/sql pour un "reset"
    bouteillesCellierInitiales: any;

    // Sujet (observable) permettant de "debouncer" l'envoi de la recherche à la base de données
    rechercheSujet: Subject<string> = new Subject<string>();

    bouteillesCellier: any = [];
    mode: MatDrawerMode = "over";
    texteRecherche = new FormControl('');

    constructor(
        private servBouteilleDeVin: BouteilleDeVinService
    ) {

    }

    ngOnInit(): void {
        this.servBouteilleDeVin.getBouteillesParCellier().subscribe(cellier => {
            this.bouteillesCellier = this.bouteillesCellierInitiales = cellier.data
        });

    }

    recherche($event: any): void {
        console.log(this.texteRecherche.value);
        if (this.texteRecherche.value.length < 3 && this.bouteillesCellier != this.bouteillesCellierInitiales) {
            this.bouteillesCellier = this.bouteillesCellierInitiales;
            return;
        }

        if (this.rechercheSujet.observers.length === 0) {
            this.rechercheSujet
                .pipe(debounceTime(700), distinctUntilChanged())
                .subscribe(recherche => {
                    if (this.texteRecherche.value.length >= 3) {
                        this.effectuerRechercheFiltree();
                    }
                });
        }

        this.rechercheSujet.next(this.texteRecherche.value);
    }

    effectuerRechercheFiltree(): void {
        this.servBouteilleDeVin
            .getBouteillesParCellier({
                texteRecherche: this.texteRecherche.value.replace("-", " ")
            })
            .subscribe(bouteillesCellier => {
                this.bouteillesCellier = bouteillesCellier.data;
            });
    }

    chargerBouteilles(){
        this.servBouteilleDeVin.getBouteillesParCellier().subscribe(cellier => {
            this.bouteillesCellier = this.bouteillesCellierInitiales = cellier.data
        });
    }

    cellierContientBouteille(){
         return  this.bouteillesCellier.length > 0;
    }
}
