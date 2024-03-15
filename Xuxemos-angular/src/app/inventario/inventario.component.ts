import { Component, OnInit } from '@angular/core';
import {ChuchesUser} from "../models/chuchesUser.model";
import {UserService} from "../services/userSer/user.service";

@Component({
  selector: 'app-inventario',
  templateUrl: './inventario.component.html',
  styleUrls: ['./inventario.component.css']
})
export class InventarioComponent implements OnInit {



  chuchesUsuario: ChuchesUser[]=[];
  constructor(public userService: UserService) { }

  ngOnInit(): void {
    this.indexChuches();
  }
  indexChuches(){

    this.userService.getChuches(1).subscribe({
      next: value => this.chuchesUsuario=value ,
      error: err => alert(err)
    });

  }
}
