module.exports = {
    env: {
      browser: true,
      es2021: true,
      node: true,
    },
    extends: ['eslint:recommended'],
    parserOptions: {
      ecmaVersion: 6,
      sourceType: 'module',
    },
    rules: {
      // Disable a specific rule globally
      'no-unused-vars': 'off',
      // Add other custom ESLint rules here
    },
  };
  
  
    