import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CrudXuxemonsComponent } from './crud-xuxemons.component';

describe('CrudXuxemonsComponent', () => {
  let component: CrudXuxemonsComponent;
  let fixture: ComponentFixture<CrudXuxemonsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CrudXuxemonsComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CrudXuxemonsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
