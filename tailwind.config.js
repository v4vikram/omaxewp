/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php", // Scan PHP files in the root directory
    "./**/*.php", // Scan all PHP files in subdirectories
    "./wp-content/themes/your-theme-name/**/*.php", // Replace 'your-theme-name' with your actual theme folder name
    "./wp-content/plugins/your-plugin-name/**/*.php", // Replace 'your-plugin-name' if working with a custom plugin
    "./wp-content/themes/your-theme-name/**/*.{html,js}", // Include HTML and JS in the theme
    "./wp-content/themes/your-theme-name/**/*.css", // Include custom CSS files if any
],
  theme: {
    extend: {
      colors: {
        green: "#00a052",
        tomato:"#e51c24",
        orange:"#ef8121",
        blue:"#2e9add",
        lightBlue:"#e0f3fe",
        pink: "#e30479",
        lightPink:"#fde8e8",
        darkGray:"#0d0e12",
        brown:"#857176"
      },
      screens: {
        '3xl': '1920px',
      },
      fontSize: {
        p: "18px",
        h2: "50px",
        h3: "35px",
        "20px": "20px",
        "75px": "75px",
        "50px": "50px",
      },
      lineHeight: {
        "39px": "39px",
        "75px": "75px",
      },
      fontFamily: {
        avianoSans: ["aviano-sans", "sans-serif"],
        montserrat: ["Montserrat", "sans-serif"],

      },
      display: {
        // unset: "unset",
        // initial: "initial",
      },
    },
  },
  plugins: [],
};
