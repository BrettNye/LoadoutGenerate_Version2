import { Component, OnInit } from '@angular/core';
import { LoadoutgeneratorService } from './loadoutgenerator.service';
import { CommonModule } from '@angular/common';
@Component({
  selector: 'app-wzload',
  templateUrl: './wzload.component.html',
  styleUrls: ['./wzload.component.sass']
})
export class WzloadComponent implements OnInit {
  response:any = false;
  weaponOne:any;
  weaponOneAttachments:any;
  weaponTwo:any;
  weaponTwoAttachments:any;
  perkOne:any;
  perkTwo:any;
  perkThree:any;
  lethal:any;
  tactical:any;
  attachOne:any = false;
  attachTwo:any = false;
  weaponOneType:any;
  weaponOneImg:any;
  weaponTwoType:any;
  weaponTwoImg:any;

  constructor(private LoadService: LoadoutgeneratorService) {}

  ngOnInit(): void {
  }

  onGenerate(){
    this.LoadService.getLoadout().subscribe(
      Response =>{
        console.log(Response);
        this.response = Response;
        this.weaponOne = this.response[0];
        this.weaponOneImg = '../../assets/images/' + this.weaponOne.WeaponName + ".JPG";
        if(this.response[1].length == 0){
          this.attachOne = false;
        } else{
          this.attachOne = true;
          this.weaponOneAttachments = this.response[1]
        }
        this.weaponTwo = this.response[2];
        this.weaponTwoImg = '../../assets/images/' + this.weaponTwo.WeaponName + ".JPG";
        if(this.response[3].length == 0){
          this.attachTwo = false;
        } else{
          this.attachTwo = true;
          this.weaponTwoAttachments = this.response[3]
        }
        this.perkOne = this.response[4];
        this.perkTwo = this.response[5];
        this.perkThree = this.response[6];
        this.lethal = this.response[7];
        this.tactical = this.response[8];
        //this.GunOutline(this.weaponOneAttachments);
      });
  }

}
