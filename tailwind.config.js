module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
  },
  purge: {
    layers: ["base", "utilities"],
    content: ["./templates/**/*.php"],
  },
  theme: {
    container: {
      contentWidth: "45rem",
      wideWidth: "60rem",
      gutter: "1rem",
    },
    fontFamily: {
      atomic: ["Gugi", "sans-serif"],
      sans: ["Open Sans", "sans-serif"],
    },
    colors: {
      primary: "#ba3131",
      secondary: "#8e2345",
      white: "#fff",
      black: "#000",

      tomato: {
        50: "#fcf8f6",
        100: "#fcefec",
        200: "#fad5d7",
        300: "#f9b2b4",
        400: "#f97e7c",
        500: "#fa534f",
        600: "#f33334",
        700: "#ba3131",
        800: "#ab202c",
        900: "#881b25",
      },
      chocolate: {
        50: "#fbfaf6",
        100: "#fbf5e8",
        200: "#f6e8c5",
        300: "#f1d190",
        400: "#e9a94b",
        500: "#e18122",
        600: "#c55b14",
        700: "#964417",
        800: "#6d3419",
        900: "#532a18",
      },
      carrot: {
        50: "#fbfaf8",
        100: "#f9f7ed",
        200: "#f2ecce",
        300: "#e9d8a0",
        400: "#d7b45d",
        500: "#c08d2e",
        600: "#99671b",
        700: "#6f4e1c",
        800: "#4f3b1d",
        900: "#3c2e1b",
      },
      pine: {
        50: "#f8fafa",
        100: "#f3f7f4",
        200: "#e2ece5",
        300: "#ccdad0",
        400: "#9fb9ac",
        500: "#6e9380",
        600: "#4e6e5b",
        700: "#3e5549",
        800: "#30403b",
        900: "#263331",
      },
      steel: {
        50: "#f7fafa",
        100: "#f0f6f7",
        200: "#dde9ee",
        300: "#c4d5e4",
        400: "#97b0d3",
        500: "#6688bc",
        600: "#49639b",
        700: "#3b4d79",
        800: "#2e3b59",
        900: "#253045",
      },
      royalblue: {
        50: "#f5f9fc",
        100: "#e9f5fb",
        200: "#cce4f8",
        300: "#aacef6",
        400: "#78a7f4",
        500: "#487bf1",
        600: "#3357e6",
        700: "#2d44c7",
        800: "#253595",
        900: "#1e2c72",
      },
      denim: {
        50: "#f6f9fc",
        100: "#ebf3fb",
        200: "#d4dff9",
        300: "#b9c6f7",
        400: "#939af6",
        500: "#696df4",
        600: "#4d4beb",
        700: "#3d3bd0",
        800: "#302f9f",
        900: "#27277b",
      },
      orchid: {
        50: "#f7f8fb",
        100: "#eff1fb",
        200: "#dcdcf8",
        300: "#c7c1f6",
        400: "#ab94f4",
        500: "#8a66f2",
        600: "#6945e8",
        700: "#4f36cb",
        800: "#3c2b9a",
        900: "#2f2476",
      },
      violet: {
        50: "#fbf9fa",
        100: "#f9f1f7",
        200: "#f3d9f0",
        300: "#eeb9e6",
        400: "#ea85d6",
        500: "#e658c2",
        600: "#ce38a1",
        700: "#9d2b7d",
        800: "#70235b",
        900: "#551d46",
      },
      blush: {
        50: "#fcf9f9",
        100: "#fbf2f3",
        200: "#f8dbe5",
        300: "#f6b9d0",
        400: "#f584a9",
        500: "#f4577e",
        600: "#e63758",
        700: "#bb2a47",
        800: "#892138",
        900: "#681c2e",
      },
    },
    editorColorPalette: {
      primary: "#ba3131",
      secondary: "#8e2345",
    },
    editorFontSizes: {
      small: "1rem",
      medium: "1.25rem",
      large: "1.5rem",
    },
    extend: {},
  },
  variants: {
    extend: {
      display: ["group-hover"],
    },
  },
  plugins: [require("@tailwindcss/typography"), require("./atomic-tailwind")],
  corePlugins: {
    container: false,
  },
};
