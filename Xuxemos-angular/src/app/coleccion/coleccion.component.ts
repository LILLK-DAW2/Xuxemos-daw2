import { Component, OnInit } from '@angular/core';
import {Xuxemon} from "../models/xuxemon.model";
import {UserService} from "../services/userSer/user.service";
import {XuxemonUser} from "../models/xuxemonUser.model";

@Component({
  selector: 'app-coleccion',
  templateUrl: './coleccion.component.html',
  styleUrls: ['./coleccion.component.css']
})
export class ColeccionComponent implements OnInit {

  xuxemonsUsuario: XuxemonUser[] =[];

  constructor(public userService: UserService) { }

  ngOnInit(): void {
    this.indexXuxemons();
  }

  indexXuxemons(){

    this.userService.getXuxemons(1).subscribe({
      next: value => this.xuxemonsUsuario=value ,
      error: err => alert(err)
    });

  }

}
