import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TarjetaColeccionComponent } from './tarjeta-coleccion.component';

describe('TarjetaColeccionComponent', () => {
  let component: TarjetaColeccionComponent;
  let fixture: ComponentFixture<TarjetaColeccionComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TarjetaColeccionComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(TarjetaColeccionComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
