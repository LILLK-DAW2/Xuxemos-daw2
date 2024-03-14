import {Component, Input, OnInit} from '@angular/core';
import { Router } from '@angular/router';
import {XuxemonUser} from "../../models/xuxemonUser.model";

@Component({
  selector: 'app-tarjeta-coleccion',
  templateUrl: './tarjeta-coleccion.component.html',
  styleUrls: ['./tarjeta-coleccion.component.css']
})
export class TarjetaColeccionComponent implements OnInit {
  @Input() xuxemon: XuxemonUser;

  constructor(private router: Router) {}
  ngOnInit(): void {
  }



}
