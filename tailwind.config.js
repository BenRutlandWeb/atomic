module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
  },
  purge: {
    //layers: ["base", "utilities"],
    content: ["./templates/**/*.php"],
  },
  theme: {
    extend: {
      fontFamily: {
        atomic: ["Gugi", "sans-serif"],
        sans: ["Open Sans", "sans-serif"],
      },
      colors: {
        primary: "#8e2345",
        secondary: "#b93030",
      },
    },
  },
  variants: {},
  plugins: [require("@tailwindcss/forms"), require("@tailwindcss/typography")],
};
