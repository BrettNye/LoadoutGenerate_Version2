import { Component, OnInit } from '@angular/core';
import { faPersonBooth, faUserCircle } from '@fortawesome/free-solid-svg-icons';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.sass']
})
export class HeaderComponent implements OnInit {
  faUserAccount = faUserCircle;

  constructor() { }

  ngOnInit(): void {
  }

}
