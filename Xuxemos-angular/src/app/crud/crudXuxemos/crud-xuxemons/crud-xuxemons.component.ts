import {Component, Input, OnInit} from '@angular/core';
import {Xuxemon} from "../../../models/xuxemon.model";
import {XuxemonService} from "../../../services/xuxemonSer/xuxemon.service";
import {FormBuilder, FormGroup, Validators} from "@angular/forms";
import {Router} from "@angular/router";

@Component({
  selector: 'app-crud-xuxemons',
  templateUrl: './crud-xuxemons.component.html',
  styleUrls: ['./crud-xuxemons.component.css']
})
export class CrudXuxemonsComponent implements OnInit {


  xuxemons: Xuxemon[] = [];

  addXuxemonForm : FormGroup;


  constructor( public xuxemonService: XuxemonService,private formBuilder: FormBuilder,private router: Router) { }

  ngOnInit(): void {

    this.addXuxemonForm = this.formBuilder.group({
      nombre: ['', Validators.required],
      vida: ['', Validators.required],
      tipo_id: ['', Validators.required],
      archivo: ['', Validators.required],
      descripcion: ['', Validators.required],

    });
    this.importXuxemons();
  }

  importXuxemons(){

    var value2 : Xuxemon []
      this.xuxemonService.index().subscribe({
      next: value => this.xuxemons=value,
      error: err => alert(err)
    });

    console.log(this.xuxemons)

  }
  destroyXuxemon( id:number){

    this.xuxemonService.destroy(id).subscribe({
      next: value => window.location.reload(),
      error: err => alert(err)
    });
  }

  addXuxemon(){

    const nombre = this.addXuxemonForm.value.nombre;
    const vida = this.addXuxemonForm.value.vida;
    const tipo_id = this.addXuxemonForm.value.tipo_id;
    const archivo = this.addXuxemonForm.value.archivo;
    const descripcion = this.addXuxemonForm.value.descripcion;


    this.xuxemonService.addXuxemon(nombre,vida,tipo_id,archivo,descripcion).subscribe({
      next: value => window.location.reload(),
      error: err => alert(err)
    });

  }

  modXuxemon(xuxemon:Xuxemon){

    this.router.navigate(['/modXuxemon'],
      {queryParams:{id:xuxemon.id,nombre:xuxemon.nombre,vida:xuxemon.vida,tipo_id:xuxemon.tipo_id,archivo:'xuxemon.archivo',descripcion:xuxemon.descripcion,created_at:xuxemon.created_at,updated_at:xuxemon.updated_at}});

  }



}
