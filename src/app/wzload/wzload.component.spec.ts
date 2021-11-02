import { ComponentFixture, TestBed } from '@angular/core/testing';

import { WzloadComponent } from './wzload.component';

describe('WzloadComponent', () => {
  let component: WzloadComponent;
  let fixture: ComponentFixture<WzloadComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ WzloadComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(WzloadComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
