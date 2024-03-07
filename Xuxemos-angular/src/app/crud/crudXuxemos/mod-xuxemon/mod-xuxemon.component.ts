import {Component, Input, OnInit} from '@angular/core';
import {FormBuilder, FormGroup, Validators} from "@angular/forms";
import {XuxemonService} from "../../../services/xuxemonSer/xuxemon.service";
import {Xuxemon} from "../../../models/xuxemon.model";
import {ActivatedRoute, Params, Router} from "@angular/router";

@Component({
  selector: 'app-mod-xuxemon',
  templateUrl: './mod-xuxemon.component.html',
  styleUrls: ['./mod-xuxemon.component.css']
})
export class ModXuxemonComponent implements OnInit {

  idxuxemon :Params;

  xuxemonMod : Xuxemon;


  modXuxemonForm : FormGroup;

  constructor(public xuxemonService: XuxemonService,private formBuilder: FormBuilder,private router: Router, private rutaActiva: ActivatedRoute) {

  }

  ngOnInit(): void {


    this.idxuxemon = this.rutaActiva.snapshot.params;
    console.log(this.idxuxemon)
    this.xuxemonMod = new class implements Xuxemon {
      archivo: string;
      descripcion: string;
      id: number;
      nombre: string;
      tipo_id: number;
      vida: number;
    }
    this.viewXuxemon();


    this.modXuxemonForm = this.formBuilder.group(
      {
        id:['',Validators.required],
        nombre: ['', Validators.required],
        vida: ['', Validators.required],
        tipo_id: ['', Validators.required],
        archivo: ['', Validators.required],
        descripcion: ['', Validators.required],
      }
    );



  }
  viewXuxemon(){


    this.xuxemonService.findXuxemon(this.idxuxemon['id']).subscribe({
      next: value =>{
        this.xuxemonMod.id =value['id']
        this.xuxemonMod.nombre =value['nombre']
        this.xuxemonMod.vida =value['vida']
        this.xuxemonMod.tipo_id =value['tipo_id']
        this.xuxemonMod.archivo =value['archivo']
        this.xuxemonMod.descripcion =value['descripcion']
      },
      error: err => alert(err)
    });

  }

  modXuxemon(){

    const id = this.modXuxemonForm.value.id;
    const nombre = this.modXuxemonForm.value.nombre;
    const vida = this.modXuxemonForm.value.vida;
    const tipo_id = this.modXuxemonForm.value.tipo_id;
    const archivo = this.modXuxemonForm.value.archivo;
    const descripcion = this.modXuxemonForm.value.descripcion;

    this.xuxemonService.modXuxemon(id,nombre,vida,tipo_id,archivo,descripcion).subscribe({
      next: value => this.router.navigate(['/crudXuxemons']),
      error: err => alert(err)
    });
  }


}
