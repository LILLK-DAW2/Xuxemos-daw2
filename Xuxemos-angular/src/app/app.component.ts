import { Component } from '@angular/core';
import {User} from "./models/user.model";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'Xuxemos-angular';


  constructor() {

    let obj: {nombre: string, password: string} = { nombre: "", password: "" };

    let usuario2: Partial<User> = { id: 4, nombre: "Pollemon" };
    console.log(usuario2);
  }

}
