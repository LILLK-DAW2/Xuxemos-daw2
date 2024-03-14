import { Component, OnInit } from '@angular/core';
import {Xuxemon} from "../models/xuxemon.model";
import {UserService} from "../services/userSer/user.service";

@Component({
  selector: 'app-coleccion',
  templateUrl: './coleccion.component.html',
  styleUrls: ['./coleccion.component.css']
})
export class ColeccionComponent implements OnInit {

  xuxemonsUsuario : Xuxemon[];

  constructor(public userService: UserService) { }

  ngOnInit(): void {
    this.indexXuxemons();
  }

  indexXuxemons(){

    this.userService.getXuxemons(1).subscribe({
      next: value =>console.log(value) ,
      error: err => alert(err)
    });

  }

}
