import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { AppComponent } from './app.component';
import { LoginComponent } from './login/login.component';
import { ReactiveFormsModule } from '@angular/forms';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import {MatFormFieldModule} from "@angular/material/form-field";
import {MatInputModule} from "@angular/material/input";
import {MatButtonModule} from "@angular/material/button";
import {MatCardModule} from "@angular/material/card";
import { RegisterComponent } from './register/register.component';
import { MenuComponent } from './menu/menu.component';
import {RouterOutlet} from "@angular/router";
import {HttpClientModule} from "@angular/common/http";
import { AppRoutingModule } from './app-routing.module';
import { CrudXuxemonsComponent } from './crud/crudXuxemos/crud-xuxemons/crud-xuxemons.component';
import { ModXuxemonComponent } from './crud/crudXuxemos/mod-xuxemon/mod-xuxemon.component';
import { ColeccionComponent } from './coleccion/coleccion.component';
import { ObjetosComponent } from './objetos/objetos.component';
import { InventarioComponent } from './inventario/inventario.component';
import { XuxedexComponent } from './xuxedex/xuxedex.component';
import { TarjetaColeccionComponent } from './coleccion/tarjeta-coleccion/tarjeta-coleccion.component';
import { ChucheInventarioComponent } from './inventario/chuche-inventario/chuche-inventario.component';


@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    RegisterComponent,
    MenuComponent,
    CrudXuxemonsComponent,
    ModXuxemonComponent,
    ColeccionComponent,
    ObjetosComponent,
    InventarioComponent,
    XuxedexComponent,
    TarjetaColeccionComponent,
    ChucheInventarioComponent,

  ],
  imports: [
    ReactiveFormsModule,
    BrowserModule,
    BrowserAnimationsModule,
    MatFormFieldModule,
    MatInputModule,
    MatButtonModule,
    MatCardModule,
    AppRoutingModule,
    RouterOutlet,
    HttpClientModule,
  ],

  providers: [],
  bootstrap: [AppComponent]

})
export class AppModule { }
