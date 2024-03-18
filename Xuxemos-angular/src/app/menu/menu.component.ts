import { Component, OnInit } from '@angular/core';
import {ActivatedRoute, Params, Router} from "@angular/router";
import {XuxemonService} from "../services/xuxemonSer/xuxemon.service";
import {FormBuilder} from "@angular/forms";
import {ChuchesService} from "../services/chuchesSer/chuches.service";

@Component({
  selector: 'app-menu',
  templateUrl: './menu.component.html',
  styleUrls: ['./menu.component.css']
})
export class MenuComponent implements OnInit {

  idUsuario :Params;
  constructor(public xuxemonService: XuxemonService,private router: Router,private rutaActiva: ActivatedRoute, private chuchesSevice: ChuchesService) { }

  ngOnInit(): void {
    this.idUsuario = this.rutaActiva.snapshot.params;
  }

  debugXuxemons(){
    const idUsuario = parseInt(this.idUsuario['id'])
    this.xuxemonService.debugXuxemons(idUsuario).subscribe({
      next: value => console.log(value),
      error: err => alert(err)
    });

  }
  debugChuches(){
    const idUsuario = parseInt(this.idUsuario['id'])
    this.chuchesSevice.debugChuces(idUsuario).subscribe({
      next: value => console.log(value),
      error: err => alert(err)
    });

  }

}
