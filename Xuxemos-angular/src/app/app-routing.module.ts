import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {RouterModule, Routes} from "@angular/router";
import {LoginComponent} from "./login/login.component";
import {RegisterComponent} from "./register/register.component";
import {MenuComponent} from "./menu/menu.component";


const routes : Routes=[
  {
    path:'welcome',  component : LoginComponent,
  },
  {
    path:'login',  component : LoginComponent,
  },
  {
    path:'menu',  component : MenuComponent,
  },
  {
    path:'register',  component : RegisterComponent,
  }, {
    path:'', redirectTo:'welcome',  pathMatch:'full',
  },

  ];

@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    RouterModule.forRoot(routes)
  ],
  exports:[RouterModule]
})
export class AppRoutingModule { }
