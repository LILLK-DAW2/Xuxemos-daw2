import { Injectable } from '@angular/core';
import {HttpClient} from "@angular/common/http";

@Injectable({
  providedIn: 'root'
})
export class ChuchesService {

  constructor(private http: HttpClient) { }

  debugChuces(user_id:number){

    const data ={
      user_id
    }
    console.log(data)
    return this.http.post('http://127.0.0.1:8000/chuchesUserDebug',
      data);
  }

}
