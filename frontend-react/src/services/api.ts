// src/services/api.ts

import axios from 'axios';
import { Product } from '../types';

const api = axios.create({
  baseURL: 'http://127.0.0.1:8000/api',
});

export const fetchProducts = async (): Promise<Product[]> => {
  const response = await api.get<Product[]>('/products');
  return response.data;
};

export default api;
