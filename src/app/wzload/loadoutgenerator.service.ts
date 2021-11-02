import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable, of } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class LoadoutgeneratorService {

  constructor(private http: HttpClient) { }

  getLoadout(): Observable<any>{
    return this.http.get('http://localhost/newloadout/PHP/generateLoadout.php', {responseType: 'json'});
  }
}
