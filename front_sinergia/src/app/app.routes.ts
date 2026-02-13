import { Routes } from '@angular/router';
import { PacienteList } from './components/paciente-list/paciente-list';

export const routes: Routes = [
    {path: 'pacientes', component: PacienteList},
    {path: '', redirectTo: 'pacientes', pathMatch: 'full'}
];
