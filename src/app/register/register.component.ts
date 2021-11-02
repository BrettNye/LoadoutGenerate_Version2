import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.sass']
})
export class RegisterComponent implements OnInit {
  countries = ['USA', 'Afganistan']

  constructor() { }

  ngOnInit(): void {
  }

}
