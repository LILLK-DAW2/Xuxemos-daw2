import { Injectable } from '@angular/core';
import {Observable} from "rxjs";
import {HttpClient} from "@angular/common/http";

@Injectable({
  providedIn: 'root'
})
export class XuxemonService {

  constructor(private http: HttpClient) { }


  index(): Observable<any> {


    return this.http.get('http://127.0.0.1:8000/xuxemonsIndex',{});
  }

  destroy(id:number):Observable<any>{

    return this.http.delete('http://127.0.0.1:8000/xuxemonsDelete?id='+id,{})

  }
  addXuxemon(nombre: string, vida:number, tipo_id:number,archivo: string,descripcion:string): Observable<any> {

    return this.http.post('http://127.0.0.1:8000/xuxemonsCreate?nombre='+nombre+'&vida='+vida+'&tipo_id='+tipo_id+'&archivo='+archivo+'&descripcion='+descripcion , {});

  }
}
