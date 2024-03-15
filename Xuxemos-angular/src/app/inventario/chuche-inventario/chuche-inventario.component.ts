import {Component, Input, OnInit} from '@angular/core';
import {ChuchesUser} from "../../models/chuchesUser.model";

@Component({
  selector: 'app-chuche-inventario',
  templateUrl: './chuche-inventario.component.html',
  styleUrls: ['./chuche-inventario.component.css']
})
export class ChucheInventarioComponent implements OnInit {


  @Input() chuche: ChuchesUser;
  constructor() { }

  ngOnInit(): void {
  }

}
