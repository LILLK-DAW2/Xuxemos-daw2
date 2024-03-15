import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ObjetoInventarioComponent } from './objeto-inventario.component';

describe('ObjetoInventarioComponent', () => {
  let component: ObjetoInventarioComponent;
  let fixture: ComponentFixture<ObjetoInventarioComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ObjetoInventarioComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ObjetoInventarioComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
