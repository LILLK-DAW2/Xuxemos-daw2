import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ChucheInventarioComponent } from './chuche-inventario.component';

describe('ChucheInventarioComponent', () => {
  let component: ChucheInventarioComponent;
  let fixture: ComponentFixture<ChucheInventarioComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ChucheInventarioComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ChucheInventarioComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
