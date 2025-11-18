import { defineConfig } from "vite";
import usePHP from 'vite-plugin-php';

export default defineConfig(() => ({
  server: {
    host: true, // Use `"::"´ to only allow local access or `true´ to allow access via local IP (e.g. 192.168.x.x)
    port: 8080,
  },
  plugins: [usePHP()],
}));