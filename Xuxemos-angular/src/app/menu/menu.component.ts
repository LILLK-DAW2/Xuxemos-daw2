import { Component, OnInit } from '@angular/core';
import {ActivatedRoute, Params, Router} from "@angular/router";
import {XuxemonService} from "../services/xuxemonSer/xuxemon.service";
import {FormBuilder} from "@angular/forms";

@Component({
  selector: 'app-menu',
  templateUrl: './menu.component.html',
  styleUrls: ['./menu.component.css']
})
export class MenuComponent implements OnInit {
  idUsuario :Params;
  constructor(public xuxemonService: XuxemonService,private router: Router,private rutaActiva: ActivatedRoute) { }

  ngOnInit(): void {
    this.idUsuario = this.rutaActiva.snapshot.params;
  }

  debug(){
    const idUsuario = parseInt(this.idUsuario['id'])
    this.xuxemonService.debug(idUsuario).subscribe({
      next: value => console.log(value),
      error: err => alert(err)
    });

  }

}
