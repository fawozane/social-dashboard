import { defineConfig } from 'vite'
import { resolve } from 'path'

export default defineConfig({
    build: {
        rollupOptions: {
            input: {
                dashboard: resolve(__dirname, 'Resources/Public/JavaScript/dashboard.js')
            },
            output: {
                entryFileNames: 'dashboard.js',
                assetFileNames: (assetInfo) => {
                    if (assetInfo.name && assetInfo.name.endsWith('.css')) {
                        return 'style.css';
                    }
                    return 'assets/[name].[ext]';
                }
            }
        },
        outDir: 'Resources/Public/Build',
        emptyOutDir: true
    }
})