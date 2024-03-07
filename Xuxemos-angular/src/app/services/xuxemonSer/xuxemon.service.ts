import { Injectable } from '@angular/core';
import {Observable} from "rxjs";
import {HttpClient} from "@angular/common/http";
import {Xuxemon} from "../../models/xuxemon.model";

@Injectable({
  providedIn: 'root'
})
export class XuxemonService {

  constructor(private http: HttpClient) { }



  //usar data
  index(): Observable<any> {


    return this.http.get('http://127.0.0.1:8000/xuxemonsIndex',{});
  }

  destroy(id:number):Observable<any>{

    return this.http.delete('http://127.0.0.1:8000/xuxemonsDelete?id='+id,{})

  }
  addXuxemon(nombre: string, vida:number, tipo_id:number,archivo: string,descripcion:string): Observable<any> {

    const data ={
      nombre,vida,tipo_id,archivo,descripcion
    }

    return this.http.post('http://127.0.0.1:8000/xuxemonsCreate', data);

  }

  modXuxemon(id: number,nombre: string, vida:number, tipo_id:number,archivo: string,descripcion:string): Observable<any>{

    const data = {
      id, nombre,vida,tipo_id,archivo,descripcion
    }

    return this.http.post('http://127.0.0.1:8000/xuxemonsUpdate',
      data);

  }
  findXuxemon(id:number){



    const data ={
      id
    }
    return this.http.post('http://127.0.0.1:8000/xuxemonFind',
      data);
  }
}
