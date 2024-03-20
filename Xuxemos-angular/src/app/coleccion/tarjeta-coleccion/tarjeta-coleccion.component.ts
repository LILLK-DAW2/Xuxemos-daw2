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

  card :string = 'closed';

  constructor(private router: Router) {}
  ngOnInit(): void {
  }

  toggleCard() {

    if(this.card == 'closed'){
      this.card = 'desplegable'
    }else{
      this.card = 'closed'
    }
  }


}
