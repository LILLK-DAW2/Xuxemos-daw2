import { Component, OnInit } from '@angular/core';
import {FormBuilder, FormGroup, Validators} from "@angular/forms";
import {UserService} from "../services/userSer/user.service";

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {

  registerForm : FormGroup;

  constructor(private formBuilder: FormBuilder, public userService: UserService) { }

  ngOnInit(): void {
    this.registerForm = this.formBuilder.group({
      nombre_u: ['', Validators.required],
      nombre:['',Validators.required],
      apellidos:['',Validators.required],
      mail:['',Validators.required],
      telefono:['',Validators.required],
      password:['',Validators.required],
      passwordR: ['', Validators.required]
      }

    );
  }
  onSubmit(): void {
  this.register();
  }
  register(){

    const nombre_u = this.registerForm.value.nombre_u;
    const nombre = this.registerForm.value.nombre;
    const apellidos = this.registerForm.value.apellidos;
    const telefono = this.registerForm.value.telefono;
    const email = this.registerForm.value.correo;
    const password= this.registerForm.value.password;

    const token =this.userService.register(nombre_u,nombre,apellidos,email,telefono, password).subscribe({
      next: value => console.log(value),
      error: err => alert(err)
    });
    console.log('tokenddd'+token);
  }

}
