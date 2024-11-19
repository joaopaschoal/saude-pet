// vite.config.js
import { defineConfig } from "file:///var/www/html/node_modules/vite/dist/node/index.js";
import laravel from "file:///var/www/html/node_modules/laravel-vite-plugin/dist/index.js";
var vite_config_default = defineConfig(
  {
    server: {
      host: "0.0.0.0",
      port: 5173,
      strictPort: true,
      // Garante que a porta seja sempre 5173
      hmr: {
        host: "localhost",
        // Pode ser 'localhost' ou '127.0.0.1'
        port: 5173
      }
    },
    plugins: [
      laravel({
        input: ["resources/css/app.css", "resources/js/app.js"],
        refresh: true
      })
    ]
  }
);
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCIvdmFyL3d3dy9odG1sXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ZpbGVuYW1lID0gXCIvdmFyL3d3dy9odG1sL3ZpdGUuY29uZmlnLmpzXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ltcG9ydF9tZXRhX3VybCA9IFwiZmlsZTovLy92YXIvd3d3L2h0bWwvdml0ZS5jb25maWcuanNcIjtpbXBvcnQgeyBkZWZpbmVDb25maWcgfSBmcm9tICd2aXRlJztcbmltcG9ydCBsYXJhdmVsIGZyb20gJ2xhcmF2ZWwtdml0ZS1wbHVnaW4nO1xuXG5leHBvcnQgZGVmYXVsdCBkZWZpbmVDb25maWcoXG4gICAge1xuICAgICAgICBzZXJ2ZXI6IHtcbiAgICAgICAgICAgIGhvc3Q6ICcwLjAuMC4wJyxcbiAgICAgICAgICAgIHBvcnQ6IDUxNzMsXG4gICAgICAgICAgICBzdHJpY3RQb3J0OiB0cnVlLCAgLy8gR2FyYW50ZSBxdWUgYSBwb3J0YSBzZWphIHNlbXByZSA1MTczXG4gICAgICAgICAgICBobXI6IHtcbiAgICAgICAgICAgICAgICBob3N0OiAnbG9jYWxob3N0JywgIC8vIFBvZGUgc2VyICdsb2NhbGhvc3QnIG91ICcxMjcuMC4wLjEnXG4gICAgICAgICAgICAgICAgcG9ydDogNTE3M1xuICAgICAgICAgICAgfVxuICAgICAgICB9LFxuICAgICAgICBwbHVnaW5zOiBbXG4gICAgICAgICAgICBsYXJhdmVsKHtcbiAgICAgICAgICAgICAgICBpbnB1dDogWydyZXNvdXJjZXMvY3NzL2FwcC5jc3MnLCAncmVzb3VyY2VzL2pzL2FwcC5qcyddLFxuICAgICAgICAgICAgICAgIHJlZnJlc2g6IHRydWUsXG4gICAgICAgICAgICB9KSxcbiAgICAgICAgXSxcbiAgICB9XG4pO1xuIl0sCiAgIm1hcHBpbmdzIjogIjtBQUF5TixTQUFTLG9CQUFvQjtBQUN0UCxPQUFPLGFBQWE7QUFFcEIsSUFBTyxzQkFBUTtBQUFBLEVBQ1g7QUFBQSxJQUNJLFFBQVE7QUFBQSxNQUNKLE1BQU07QUFBQSxNQUNOLE1BQU07QUFBQSxNQUNOLFlBQVk7QUFBQTtBQUFBLE1BQ1osS0FBSztBQUFBLFFBQ0QsTUFBTTtBQUFBO0FBQUEsUUFDTixNQUFNO0FBQUEsTUFDVjtBQUFBLElBQ0o7QUFBQSxJQUNBLFNBQVM7QUFBQSxNQUNMLFFBQVE7QUFBQSxRQUNKLE9BQU8sQ0FBQyx5QkFBeUIscUJBQXFCO0FBQUEsUUFDdEQsU0FBUztBQUFBLE1BQ2IsQ0FBQztBQUFBLElBQ0w7QUFBQSxFQUNKO0FBQ0o7IiwKICAibmFtZXMiOiBbXQp9Cg==
