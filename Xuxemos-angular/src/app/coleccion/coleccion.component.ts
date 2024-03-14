import { Component, OnInit } from '@angular/core';
import {Xuxemon} from "../models/xuxemon.model";

@Component({
  selector: 'app-coleccion',
  templateUrl: './coleccion.component.html',
  styleUrls: ['./coleccion.component.css']
})
export class ColeccionComponent implements OnInit {

  xuxemonsUsuario : Xuxemon[];

  constructor() { }

  ngOnInit(): void {
  }

}
