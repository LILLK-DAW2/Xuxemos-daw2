import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ModXuxemonComponent } from './mod-xuxemon.component';

describe('ModXuxemonComponent', () => {
  let component: ModXuxemonComponent;
  let fixture: ComponentFixture<ModXuxemonComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ModXuxemonComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ModXuxemonComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
