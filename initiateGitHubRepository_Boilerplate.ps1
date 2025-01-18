# To push from a different folder than current
# cd: "<path\to\your\repository>"

# Initialize a new Git repository
git init

# Add the remote repository
git remote add origin https://github.com/felipe-mig/Marvel_Password_Encryption_MongoDB.git

# Add all files to the staging area and excludes ps1 files
git add .

# Commit the changes with a message
git commit -m "Initial commit: Add project files for Marvel_Password_Encryption_MongoDB"

# Rename the branch to main
git branch -M main

# Push the changes to the remote repository
git push -u origin main

# Verify the repository URL
Start-Process "https://github.com/felipe-mig/Marvel_Password_Encryption_MongoDB"


if ($LASTEXITCODE -eq 0) { 
    Write-Host "Repository setup successfully and files pushed to GitHub $([char]::ConvertFromUtf32(0x1F44D))." -ForegroundColor Cyan 
} else 
    { Write-Host "An error occurred during the repository setup." -ForegroundColor Red }




