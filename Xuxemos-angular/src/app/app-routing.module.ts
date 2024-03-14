import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {RouterModule, Routes} from "@angular/router";
import {LoginComponent} from "./login/login.component";
import {RegisterComponent} from "./register/register.component";
import {MenuComponent} from "./menu/menu.component";
import {CrudXuxemonsComponent} from "./crud/crudXuxemos/crud-xuxemons/crud-xuxemons.component";
import {ModXuxemonComponent} from "./crud/crudXuxemos/mod-xuxemon/mod-xuxemon.component";
import {InventarioComponent} from "./inventario/inventario.component";


const routes : Routes=[
  {
    path:'welcome',  component : LoginComponent,
  },
  {
    path:'login',  component : LoginComponent,
  },
  {
    path:'menu/:id',  component : MenuComponent,
  },
  {
    path:'crudXuxemons',  component : CrudXuxemonsComponent,


  },{
    path:'inventarioXuxemons',  component : InventarioComponent,


  }, {path:'modXuxemon/:id',  component : ModXuxemonComponent,
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
