import { TestBed } from '@angular/core/testing';

import { LoadoutgeneratorService } from './loadoutgenerator.service';

describe('LoadoutgeneratorService', () => {
  let service: LoadoutgeneratorService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(LoadoutgeneratorService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
