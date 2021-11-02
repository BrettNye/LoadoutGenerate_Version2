import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule} from '@angular/router';
import { FontAwesomeModule } from '@fortawesome/angular-fontawesome';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { MainComponent } from './main/main.component';
import { HeaderComponent } from './header/header.component';
import { WzloadComponent } from './wzload/wzload.component';
import { HttpClientModule } from '@angular/common/http';
import { CODhomeComponent } from './codhome/codhome.component';
import { CODheaderComponent } from './codheader/codheader.component';
import { WarzonehomeComponent } from './warzonehome/warzonehome.component';
import { RegisterComponent } from './register/register.component';
import { LoginComponent } from './login/login.component';

@NgModule({
  declarations: [
    AppComponent,
    MainComponent,
    HeaderComponent,
    WzloadComponent,
    CODhomeComponent,
    CODheaderComponent,
    WarzonehomeComponent,
    RegisterComponent,
    LoginComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    RouterModule.forRoot([
      { path: "", component: MainComponent },
      { path: "cod", component: CODhomeComponent},
      { path: "warzonehome", component: WarzonehomeComponent},
      { path: "wzload", component: WzloadComponent},
      { path: 'register', component: RegisterComponent},
      { path: 'login', component: LoginComponent}
    ]),
    HttpClientModule,
    FontAwesomeModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
