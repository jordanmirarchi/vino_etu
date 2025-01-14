import { Component, Inject, OnInit, Output } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { AuthService } from '@services/auth.service';
import { BouteilleDeVinService } from '@services/bouteille-de-vin.service';
import { EventEmitter } from '@angular/core';
import { MatSnackBar } from '@angular/material/snack-bar';

@Component({
    selector: 'app-modifier-cellier',
    templateUrl: './modifier-cellier.component.html',
    styleUrls: ['./modifier-cellier.component.scss']
})
export class ModifierCellierComponent implements OnInit {

    cellier: any;

    idUtilisateur: any;

    nouveauCellier: any;


    modifierCellier = new FormGroup({
        nom: new FormControl('', Validators.required),
        description: new FormControl(''),
        id: new FormControl(''),
    });

    // Émetteur d'événnement afin d'afficher la liste des celliers sans refresh après la modification
    @Output("chargerCelliers") chargerCelliers: EventEmitter<any> = new EventEmitter();

    constructor(
        public formulaireRef: MatDialogRef<ModifierCellierComponent>,
        @Inject(MAT_DIALOG_DATA) public data: any,
        private servAuth: AuthService,
        private servBouteilleDeVin: BouteilleDeVinService,
        private snackBar: MatSnackBar,
    ) { }

    ngOnInit(): void {

        this.initChampsModification();



    }

    // Pour l'affichage des données actuelles de la bouteille à modifier
    initChampsModification() {
        this.modifierCellier.patchValue({
            nom: this.data.nom,
            description: this.data.description,
            id: this.data.id,
        })
    }


    // Affichage d'erreur quand le champ obligatoire n'est pas rempli
    get erreur() {
        return this.modifierCellier.controls;
    }

    // fermer le modal avec un X
    close(): void {
        this.formulaireRef.close();
    }

    postCellier(cellier: any) {

        this.idUtilisateur = this.servAuth.getIdUtilisateurAuthentifie();

        this.nouveauCellier = { ...cellier }

        this.servBouteilleDeVin.modifierCellier(this.nouveauCellier, cellier.id)
            .subscribe(() => {

                this.formulaireRef.close();

                this.chargerCelliers.emit();

                this.snackBar.open(
                    `Vous avez modifier votre cellier`,
                    "Fermer",
                    {
                        panelClass: "notif-success"
                    }
                );
            });
    }


}
