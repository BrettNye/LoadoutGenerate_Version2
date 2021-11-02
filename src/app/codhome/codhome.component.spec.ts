import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CODhomeComponent } from './codhome.component';

describe('CODhomeComponent', () => {
  let component: CODhomeComponent;
  let fixture: ComponentFixture<CODhomeComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CODhomeComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(CODhomeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
