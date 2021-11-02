import { ComponentFixture, TestBed } from '@angular/core/testing';

import { WarzonehomeComponent } from './warzonehome.component';

describe('WarzonehomeComponent', () => {
  let component: WarzonehomeComponent;
  let fixture: ComponentFixture<WarzonehomeComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ WarzonehomeComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(WarzonehomeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
