import {Component, OnInit} from '@angular/core';
import {FormBuilder, FormGroup, Validators} from "@angular/forms";
import {MatInputModule} from '@angular/material/input';
import {MatFormFieldModule} from '@angular/material/form-field';
import {UserService} from "../services/userSer/user.service";
import {Router} from "@angular/router";

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  loginForm: FormGroup;

  constructor(private formBuilder: FormBuilder, public userService: UserService,private router: Router) {
  }


  ngOnInit(): void {
    this.loginForm = this.formBuilder.group({
      nombre_u: ['', Validators.required],
      password: ['', Validators.required]
    });
  }

  onSubmit(): void {
    if (this.loginForm.valid) {
      console.log(this.loginForm.value);
    }
    this.login();

  }
  login() {

    const nombre_u = this.loginForm.value.nombre_u;
    const password = this.loginForm.value.password;


    const token = this.userService.login(nombre_u, password).subscribe({
      next: value => console.log(value),
      error: err => alert(err)
    });
    //console.log(token);
    this.router.navigate(['/menu']);
  }
}
