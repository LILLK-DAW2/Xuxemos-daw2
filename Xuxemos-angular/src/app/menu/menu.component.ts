import { Component, OnInit } from '@angular/core';
import {UserService} from "../services/userSer/user.service";
import {Router} from "@angular/router";

@Component({
  selector: 'app-menu',
  templateUrl: './menu.component.html',
  styleUrls: ['./menu.component.css']
})
export class MenuComponent implements OnInit {

  constructor(public userService: UserService,private router: Router) { }

  ngOnInit(): void {
  }

  public logout(){
    this.userService.logout().subscribe({
      next: value => console.log(value),
      error: err => alert(err)
    });
    this.router.navigate(['/login']);

  }
}
