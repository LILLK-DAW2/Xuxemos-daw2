export interface User {
  id: number;
  token: string;
  nombre: string;
  apellidos: string;
  telefeno: string;
  correo: string;
  rol :string;
  estado: string;
  fechaC: Date;
  fechaB: Date | null;
}
