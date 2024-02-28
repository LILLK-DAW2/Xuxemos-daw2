import { Component, OnInit } from '@angular/core';
import {FormBuilder, FormGroup, Validators} from "@angular/forms";

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {

  registerForm : FormGroup;

  constructor(private formBuilder: FormBuilder) { }

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

  }

}
