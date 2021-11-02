import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CODheaderComponent } from './codheader.component';

describe('CODheaderComponent', () => {
  let component: CODheaderComponent;
  let fixture: ComponentFixture<CODheaderComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CODheaderComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(CODheaderComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
