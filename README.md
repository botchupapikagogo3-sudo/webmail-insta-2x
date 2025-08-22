# Flask Safe Login App

Exemplo básico de login em Flask com boas práticas (hash de senha em memória para demonstração).
> **Atenção**: Substitua o dicionário `USERS` por um banco de dados real em produção.

## Como rodar localmente
```bash
python -m venv .venv
# Windows:
.venv\Scripts\pip install -r requirements.txt
.venv\Scripts\python app.py
# Linux/Mac:
source .venv/bin/activate
pip install -r requirements.txt
python app.py
```
Abra: http://127.0.0.1:5000

## Login de teste
- E-mail: `admin@exemplo.com`
- Senha: `minha-senha-forte`
