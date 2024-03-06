import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {RouterModule, Routes} from "@angular/router";
import {LoginComponent} from "./login/login.component";
import {RegisterComponent} from "./register/register.component";
import {MenuComponent} from "./menu/menu.component";
import {CrudXuxemonsComponent} from "./crud/crudXuxemos/crud-xuxemons/crud-xuxemons.component";
import {ModXuxemonComponent} from "./crud/crudXuxemos/mod-xuxemon/mod-xuxemon.component";


const routes : Routes=[
  {
    path:'welcome',  component : CrudXuxemonsComponent,
  },
  {
    path:'login',  component : LoginComponent,
  },
  {
    path:'menu',  component : MenuComponent,
  },
  {
    path:'crudXuxemons',  component : CrudXuxemonsComponent,
  },
  {
    path:'modXuxemon/:id/:nombre/:vida/:tipo_id/:archivo/:descripcion/:created_at/:updated_at',  component : ModXuxemonComponent,
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
