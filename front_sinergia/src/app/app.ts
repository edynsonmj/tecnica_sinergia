import { Component, signal } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { PacienteList } from './components/paciente-list/paciente-list';

@Component({
  selector: 'app-root',
  imports: [RouterOutlet, PacienteList],
  templateUrl: './app.html',
  styleUrl: './app.css'
})
export class App {
  protected readonly title = signal('front_sinergia');
}
