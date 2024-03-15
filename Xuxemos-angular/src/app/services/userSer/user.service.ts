import { Injectable } from '@angular/core';
import {HttpClient} from "@angular/common/http";
import {Observable} from "rxjs";
import {XuxemonUser} from "../../models/xuxemonUser.model";

@Injectable({
  providedIn: 'root'
})
export class UserService {

  constructor(private http: HttpClient) { }

  login( nombre_u: string, password: string): Observable<any> {


    console.log(nombre_u);
    console.log('pass:::.'+password);

    return this.http.post('http://127.0.0.1:8000/login?nombre_u='+nombre_u+'&password='+password, {

    });

  }
  register(nombre_u: string, nombre:string, apellidos:string,email: string,telefono:string, password: string): Observable<any> {


    return this.http.post('http://127.0.0.1:8000/register?nombre_u=' + nombre_u + '&nombre=' + nombre + '&apellidos=' + apellidos + '&telefono=' + telefono + '&email=' + email + '&password=' + password, {});
  }
  getXuxemons(user_id:number):Observable<XuxemonUser[]>{

    const queryParams = `?user_id=${user_id}`;
    const url = `http://127.0.0.1:8000/xuxemonsUserIndex${queryParams}`;

    return this.http.get<XuxemonUser[]>(url);

  }
}
