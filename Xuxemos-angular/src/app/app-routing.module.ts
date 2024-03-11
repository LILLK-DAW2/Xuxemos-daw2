import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ColeccionComponent } from './coleccion/coleccion.component';
import { MenuComponent } from './menu/menu.component';

const routes: Routes = [
  { path: 'coleccion', component: ColeccionComponent },
  { path: 'home', component: MenuComponent },
 
  { path: '', redirectTo: '/home', pathMatch: 'full' },

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule {}